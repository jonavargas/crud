<?php

Load::models('menus');
 
class MenusController extends AppController {

    public function index($page=1) 
    {
        $menu = new Menus();
        $this->listMenus = $menu->getMenus($page);
    }
 
    /**
     * Crea un nuevo platillo para el menú
     */
    public function create ()
    {
      
        if(Input::hasPost('menus')){

            $menu = new Menus(Input::post('menus'));

            if($menu->create()){
                Flash::valid('Platillo agregado al menú');

                Input::delete();
                return;               
            }else{
                Flash::error('Falló al agregar el nuevo platillo');
            }
        }
    }
 

 
    /**
     * Eliminar un platillo seleccionado del menú
     */
    public function del($id)
    {
        $menu = new Menus();
        if ($menu->delete((int)$id)) {
                Flash::valid('Platillo eliminado del menú');
        }else{
                Flash::error('Falló al eliminar el platillo'); 
        }
 
        return Redirect::to();
    }
}