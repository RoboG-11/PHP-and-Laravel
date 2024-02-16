/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package builder_menurestaurante;

/**
 *
 * @author PEDRO PABLO
 */
public class ConstConcreto_MenuEjecutivo extends Constructor_Menu {
    
    private MenuRestaurante menuEjecutivo;
    @Override
    public void creaMenu(int VarianteMenu) {
        if (VarianteMenu == 1){
        menuEjecutivo = new MenuRestaurante ("Menú Ejecutivo", "Ensalada César", "No procede", "No procede", "Risotto Milanese", 
                "Pollo al horno", "Crema catalana", "No procede");
        }
        if (VarianteMenu == 2){
        menuEjecutivo = new MenuRestaurante ("Menú Ejecutivo", "Ensalada Caprese", "No procede", "No procede",  "Pasta Bolognesa", 
                "Ternera al horno", "Pastel queso y chocolate", "No procede");
        }
    }

    @Override
    public Menu getMenu() {
        return menuEjecutivo;
    }
    
}
