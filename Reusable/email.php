<?php




  const FLASH = 'FLASH_MESSAGES';
  const FLASH_ERROR = 'error';
  const FLASH_SUCCESS = 'success';
  const STORAGE =  'storage';

  function create_flash_message(string $name, string $message, string $type):void
  {
    if(isset($_SESSION[FLASH][$name]))
    {
        unset($_SESSION[FLASH][$name]);
    }
    $_SESSION[FLASH][$name] = ['message' => $message, 'type' => $type];
  }

        function format_flash_message(array $flash_message): string
        {
            return sprintf('<div class="alert alert-%s">%s</div>',
                $flash_message['type'],
                $flash_message['message']
            );
        }

                function display_flash_message(string $name): void
        {
            if (!isset($_SESSION[FLASH][$name])) {
                return;
            }

            // get message from the session
            $flash_message = $_SESSION[FLASH][$name];

            // delete the flash message
            unset($_SESSION[FLASH][$name]);

            // display the flash message
            echo format_flash_message($flash_message);
        }



 
?>