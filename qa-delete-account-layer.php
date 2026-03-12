<?php

class qa_html_theme_layer extends qa_html_theme_base {

    function body_content() {
        parent::body_content();

        $userid = qa_get_logged_in_userid();

        if ($userid && qa_request() == 'account') {

            $this->output('
            <div style="margin-top:25px; padding:8px; border-radius:10px; background: repeating-linear-gradient(45deg, #ffe600, #ffe600 15px, #000000 15px, #000000 30px); box-shadow: 0 4px 8px rgba(0,0,0,0.2);">
                
                <div style="background:#fff6f6; padding:20px; border-radius:6px; text-align:center;">
                    <h3 style="color:#cc0000; font-weight: bold; margin-top: 0;">⚠ Zona Peligrosa</h3>
                    <p style="color:#333; font-size:15px;">Eliminar tu cuenta borrará tu perfil permanentemente.</p>

                    <button onclick="qaDeleteAccountConfirm()" style="
                        background: linear-gradient(90deg, #00FFFF, #FF00FF);
                        color: white;
                        text-shadow: 1px 1px 2px rgba(0,0,0,0.8);
                        padding: 12px 24px;
                        border: 2px solid #ffffff;
                        border-radius: 8px;
                        font-weight: bold;
                        font-size: 16px;
                        cursor: pointer;
                        box-shadow: 0 4px 6px rgba(0,0,0,0.3);
                        transition: transform 0.2s ease;">
                        Eliminar mi cuenta
                    </button>
                </div>
            </div>

            <script>
            function qaDeleteAccountConfirm(){
                if(confirm("¿Seguro que deseas eliminar tu cuenta? Esta acción no se puede deshacer.")){
                    window.location.href = "'.qa_path_html('delete-account').'";
                }
            }
            </script>
            ');
        }
    }
}
