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
public class ConstConcreto_MenuDelDia extends Constructor_Menu {
    private MenuRestaurante menuDelDia;
    
    @Override
    //CREA UN MENU DEL DÍA PARA CADA DÍA DE LA SEMANA, DE LUNES A VIERNES
    public void creaMenu(int VarianteMenu) {
        switch (VarianteMenu){
            case 1:
                menuDelDia = new MenuRestaurante ("Menú del Día", "No procede", "No procede", "No procede", "Minestra de verduras", 
                "Pollo asado con papas", "Natilla de chocolate", "No procede");
                break;
            case 2:
                menuDelDia = new MenuRestaurante ("Menú del Día", "No procede", "No procede", "No procede","Crema de frijoles", 
                "Milanesa de res", "Arroz con leche", "No procede");
                break;
            case 3:
                menuDelDia = new MenuRestaurante ("Menú del Día", "No procede", "No procede", "No procede", "Crema de champiñones", 
                "Picadillo con papas", "Pastel de queso e higos", "No procede");
                break;
            case 4:
                menuDelDia = new MenuRestaurante ("Menú del Día", "No procede", "No procede", "No procede", "Minestra de pollo", 
                "Pechuga de pollo a la parmesana", "Pastel de tres leches", "No procede");
                break;
            case 5:
                menuDelDia = new MenuRestaurante ("Menú del Día", "No procede", "No procede", "No procede", "Crema de elote con queso", 
                "Filete de pescado empanizado", "Flan napolitano", "No procede");
                break;
        }
    }
    
    @Override
    public Menu getMenu() {
        return menuDelDia;
    }
    
}
