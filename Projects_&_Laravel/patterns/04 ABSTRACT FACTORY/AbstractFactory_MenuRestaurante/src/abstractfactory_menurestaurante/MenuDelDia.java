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
public class MenuDelDia extends Menu{
    private String primerPlato;
    private String segundoPlato;
    private String postre;
    private String descripcionMenu;
    
    public MenuDelDia (String primerPlato, String segundoPlato, 
            String postre) {
        this.primerPlato = primerPlato;
        this.segundoPlato = segundoPlato;
        this.postre = postre;
    }
    @Override
    public void setMenu(String antiPasto1, String antiPasto2, String antiPasto3,
            String primerPlato, String segundoPlato, String postre, String vino) {
        this.primerPlato = primerPlato;
        this.segundoPlato = segundoPlato;
        this.postre = postre;
    }

    @Override
    public void visualizaMenu() {
        System.out.println("MENU DEL DÍA CREADO:"); 
        descripcionMenu = "PRIMER PLATO:  " + primerPlato;
        System.out.println(descripcionMenu); 
        descripcionMenu = "SEGUNDO PLATO:  " + segundoPlato;
        System.out.println(descripcionMenu); 
        descripcionMenu = "POSTRE:  " + postre;
        System.out.println(descripcionMenu);  
        System.out.println(); 
    }

    
    
}
