<?php
if(isset($_GET['action']))
{
    $action=$_GET['action'];
    switch($action)
    {
        case  'list':
            require_once 'Controller/stagiairecontoller.php';
            index();
                break;
       case  'create':
        require_once 'Controller/stagiairecontoller.php';
        createAction();
            break;
            case  'delete':
                require_once 'Controller/stagiairecontoller.php';
                deleteAction();
                    break;

                    case  'edit':
                        require_once 'Controller/stagiairecontoller.php';
                        editAction();
                            break;

                            case  'destroy':
                                require_once 'Controller/stagiairecontoller.php';
                                destroyAction();
                                    break;
                                    
                            case  'store':
                                require_once 'Controller/stagiairecontoller.php';
                                storeAction();
                                    break;
                                    case  'update':
                                        require_once 'Controller/stagiairecontoller.php';
                                        updateAction();
                                            break;
    }

}
?>