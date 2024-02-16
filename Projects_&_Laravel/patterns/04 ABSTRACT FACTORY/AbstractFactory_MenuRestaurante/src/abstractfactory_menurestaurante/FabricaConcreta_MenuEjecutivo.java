/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package abstractfactory_menurestaurante;

/**
 *
 * @author PEDRO PABLO
 */
public class FabricaConcreta_MenuEjecutivo extends FabricaAbstractaMenu {
    
    private MenuEjecutivo menuEjecutivo;
    @Override
    public void creaMenu(int VarianteMenu) {
        if (VarianteMenu == 1){
        menuEjecutivo = new MenuEjecutivo ("Ensalada César", "Risotto Milanese", 
                "Pollo al horno", "Crema catalana");
        }
        if (VarianteMenu == 2){
        menuEjecutivo = new MenuEjecutivo ("Ensalada Caprese", "Pasta Bolognesa", 
                "Ternera al horno", "Pastel queso y chocolate");
        }
    }

    @Override
    public Menu getMenu() {
        return menuEjecutivo;
    }
    
}
