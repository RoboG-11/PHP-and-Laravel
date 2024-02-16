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
public class FabricaConcretaMenuDelDia extends FabricaAbstractaMenu {
    private MenuDelDia menuDelDia;
    
    @Override
    //CREA UN MENU DEL DÍA PARA CADA DÍA DE LA SEMANA, DE LUNES A VIERNES
    public void creaMenu(int VarianteMenu) {
        switch (VarianteMenu){
            case 1:
                menuDelDia = new MenuDelDia ("Minestra de verduras", 
                "Pollo asado con papas", "Natilla de chocolate");
                break;
            case 2:
                menuDelDia = new MenuDelDia ("Crema de frijoles", 
                "Milanesa de res", "Arroz con leche");
                break;
            case 3:
                menuDelDia = new MenuDelDia ("Crema de champiñones", 
                "Picadillo con papas", "Pastel de queso e higos");
                break;
            case 4:
                menuDelDia = new MenuDelDia ("Minestra de pollo", 
                "Pechuga de pollo a la parmesana", "Pastel de tres leches");
                break;
            case 5:
                menuDelDia = new MenuDelDia ("Crema de elote con queso", 
                "Filete de pescado empanizado", "Flan napolitano");
                break;
        }
    }
    
    @Override
    public Menu getMenu() {
        return menuDelDia;
    }
    
}
