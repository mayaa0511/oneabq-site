<?php
    /*
    echo $HTML->heading3('Personal data');
    echo $HTML->para('If storing personal data, you must pay attention to any legal requirements for how that data is treated.');

    echo $HTML->heading3('Uploading files');
    echo $HTML->para('Set the file upload path to a folder %soutside of your website%s.', '<strong>', '</strong>');
    echo $HTML->para('It is critical that you do not allow site visitors up upload files directly into your website.');
    echo $HTML->para('Path must be a full system path. For reference, your path to Perch is:');
    echo '<p><code style="word-wrap: break-word;">', str_replace('/', '<span></span>/', $HTML->encode(PERCH_PATH)), '</code></p>';
    echo $HTML->para('The path you give should be above your website and must be writable by PHP.');
    
    echo $HTML->heading3('Email settings');
    echo $HTML->para('Form data can be used in any of the email fields by enclosing the name of a field in curly brackets:');
    echo $HTML->para('Subject: Submission from %s{name}%s', '<code>', '</code>');
    
    echo $HTML->heading3('Spam prevention');
    echo $HTML->para('Akismet is an excellent third-party service for filtering spam. %sFind out more or get an API key,%s', '<a href="http://akismet.com/">', '</a>');
    */

    
    echo $HTML->title_panel([
        'heading' => $Lang->get('Editing form options'),
    ], $CurrentUser);
    

    if (isset($settings['fileLocation']) && trim($settings['fileLocation'])!='' && !is_writable($settings['fileLocation'])) {
        echo $HTML->warning_message('The file path %s is not writable by PHP.', '<code>'.$settings['fileLocation'].'</code>');
    }

    $Smartbar = new PerchSmartbar($CurrentUser, $HTML, $Lang);

    $Smartbar->add_item([
        'active' => false,
        'title' => 'All Responses',
        'link'  => $API->app_nav().'/responses/?id='.$ThisForm->id(),
        'icon'  => 'core/o-documents',
    ]);

    $Smartbar->add_item([
        'active' => false,
        'title' => 'Spam',
        'link'  => $API->app_nav().'/responses/?id='.$ThisForm->id().'&spam=1',
        'icon'  => 'ext/o-poop',
    ]);

    $Smartbar->add_item([
        'active' => true,
        'title' => 'Form Options',
        'link'  => $API->app_nav().'/settings/?id='.$ThisForm->id(),
        'priv'  => 'perch_forms.configure',
        'icon'  => 'core/o-toggles',
    ]);

    $Smartbar->add_item([
        'active' => false,
        'title' => 'Download CSV',
        'link'  => $API->app_nav().'/responses/export/?id='.$ThisForm->id(),
        'priv'  => 'perch_forms.configure',
        'icon'  => 'ext/o-cloud-download',
        'position' => 'end',
    ]);



    echo $Smartbar->render();
    
    echo $HTML->heading2('Form settings');
        
    echo $Form->form_start();
    
        $Form->last = true;
        echo $Form->text_field('formTitle', 'Title', $details['formTitle']);
        

        /* STORING RESPONSES */
        echo $HTML->heading2('Storing responses');
        
        echo $Form->checkbox_field('store', 'Store responses', '1', isset($settings['store'])?$settings['store']:'');
        $Form->last = true;
        echo $Form->hint('Must be absolute system path outside site public root');
        echo $Form->text_field('fileLocation', 'File upload path', isset($settings['fileLocation'])?$settings['fileLocation']:'');


        /* SENDING EMAIL */
        echo $HTML->heading2('Sending email');
		echo $Form->hint('Requires a functioning mail server that can send mail from PHP.');
		echo $Form->checkbox_field('email', 'Send response via email', '1', isset($settings['email'])?$settings['email']:'');
		
        $opts = array('No template' => array(
                array('filename'=>'', 'value'=>'', 'path'=>'', 'label'=>$Lang->get('Plain text only')),
            ));

        $templates = $Forms->get_templates();
        $templates = $opts + $templates;
        echo $Form->grouped_select_field('adminEmailTemplate', 'Email Template', $templates, isset($settings['adminEmailTemplate'])?$settings['adminEmailTemplate']:'');

       
        echo $Form->hint('Separate multiple addresses with commas.');
        echo $Form->text_field('emailAddress', 'Email address(es)', isset($settings['emailAddress'])?$settings['emailAddress']:'');
        
        echo $Form->text_field('adminEmailSubject', 'Email subject line', isset($settings['adminEmailSubject'])?$settings['adminEmailSubject']:'');
        echo $Form->text_field('adminEmailFromName', 'Send from', (isset($settings['adminEmailFromName']) ? $settings['adminEmailFromName'] : PERCH_EMAIL_FROM_NAME));
        
        

        echo $Form->text_field('adminEmailFromAddress', 'Send from address', (isset($settings['adminEmailFromAddress']) ? $settings['adminEmailFromAddress'] : PERCH_EMAIL_FROM));
        

        $opts = array();
        $opts[] = array('value'=>'', 'label'=>'-');

        $Template = $API->get('Template');
        $file = PerchUtil::file_path(PERCH_PATH.$ThisForm->formTemplate());
        if (file_exists($file)) {
             PerchUtil::debug('Using template: '.$file, 'template');
            $content = file_get_contents($file);
            $Template->set_from_string($content, 'input');
            $tags = $Template->find_all_tags('input');

            if (PerchUtil::count($tags)) {
                foreach($tags as $Tag) {
                    if ($Tag->id()) {
                        $opts[] = array('value'=>$Tag->id(), 'label'=>$Tag->id());    
                    }
                }
            }
        }else{
            PerchUtil::debug('Template not found: '.$file, 'error');
        }


        echo $Form->hint('Choose a field to use as the value of the email ReplyTo header and for the autoreponse');
        echo $Form->select_field('formEmailFieldID', 'Email address field', $opts, isset($settings['formEmailFieldID'])?$settings['formEmailFieldID']:'');


        $Form->last = true;
        echo $Form->textarea_field('adminEmailMessage', 'Email introduction text', isset($settings['adminEmailMessage'])?$settings['adminEmailMessage']:'', 's input-simple', false);

        /* RESPONDING */
        echo $HTML->heading2('Autoresponse');

    
        echo $Form->hint('Will send any text entered below plus the details the visitor submitted');
        echo $Form->checkbox_field('sendAutoResponse', 'Send autoreponse', '1', isset($settings['sendAutoResponse'])?$settings['sendAutoResponse']:'');

        echo $Form->grouped_select_field('autoresponseTemplate', 'Autoresponse Template', $templates, isset($settings['autoresponseTemplate'])?$settings['autoresponseTemplate']:'');

        echo $Form->text_field('responseEmailSubject', 'Email subject line', isset($settings['responseEmailSubject'])?$settings['responseEmailSubject']:'');


        $Form->last = true;
        echo $Form->textarea_field('responseEmailMessage', 'Response introduction text', isset($settings['responseEmailMessage'])?$settings['responseEmailMessage']:'', 's input-simple', false);
        
        /* SPAM */        
        echo $HTML->heading2('Spam prevention');
        
        echo $Form->checkbox_field('akismet', 'Use Akismet', '1', isset($settings['akismet'])?$settings['akismet']:'');
        echo $Form->text_field('akismetAPIKey', 'Akismet API key', isset($settings['akismetAPIKey'])?$settings['akismetAPIKey']:'');


        /* REDIRECTING */
        echo $HTML->heading2('Redirection');
        echo $Form->hint('Optional - if set, will redirect to this URL after successful completion of the form');
        echo $Form->text_field('successURL', 'On success', isset($settings['successURL'])?$settings['successURL']:'');


        echo $Form->submit_field('btnSubmit', 'Save', $API->app_path());

    
    echo $Form->form_end();
    