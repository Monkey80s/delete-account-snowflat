<?php

class qa_delete_account_page {

    function match_request($request) {
        return $request === 'delete-account';
    }

    function process_request($request) {

        require_once QA_INCLUDE_DIR.'qa-db-users.php';

        $userid = qa_get_logged_in_userid();

        if (!$userid) {
            qa_redirect('');
        }

        if (qa_clicked('confirm_delete')) {

            qa_db_user_delete($userid);

            qa_redirect('');
        }

        $qa_content = qa_content_prepare();
        $qa_content['title'] = 'Eliminar mi cuenta';

        $qa_content['form'] = array(
            'tags' => 'method="post"',
            'fields' => array(
                'warning' => array(
                    'label' => '⚠ Esta acción eliminará tu cuenta permanentemente y no se puede deshacer.'
                ),
            ),
            'buttons' => array(
                'confirm_delete' => array(
                    'label' => 'Eliminar definitivamente',
                    'tags' => 'name="confirm_delete"',
                ),
            ),
        );

        return $qa_content;
    }
}
