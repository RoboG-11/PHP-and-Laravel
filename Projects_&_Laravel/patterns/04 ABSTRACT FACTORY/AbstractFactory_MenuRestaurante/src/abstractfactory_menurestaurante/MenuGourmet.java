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
public class MenuGourmet extends Menu {
    @SuppressWarnings("FieldMayBeFinal")
    private String antiPasto1;
    private String antiPasto2;
    private String antiPasto3;
    private String primerPlato;
    private String segundoPlato;
    private String postre;
    private String vino;
    private String descripcionMenu;
    
    //MÉTODO CONSTRUCTOR
    public MenuGourmet (String antiPasto1, String antiPasto2, String antiPasto3,
            String primerPlato, String segundoPlato, String postre, String vino) {
        this.antiPasto1 = antiPasto1;
        this.antiPasto2 = antiPasto2;
        this.antiPasto3 = antiPasto3;
        this.primerPlato = primerPlato;
        this.segundoPlato = segundoPlato;
        this.postre = postre;
        this.vino = vino;
    }
    @Override
    public void setMenu(String antiPasto1, String antiPasto2, String antiPasto3,
            String primerPlato, String segundoPlato, String postre, String vino) {
        this.antiPasto1 = antiPasto1;
        this.antiPasto2 = antiPasto2;
        this.antiPasto3 = antiPasto3;
        this.primerPlato = primerPlato;
        this.segundoPlato = segundoPlato;
        this.postre = postre;
        this.vino = vino;
    }

    @Override
    public void visualizaMenu() {
        System.out.println("MENU GOURMET CREADO:"); 
        descripcionMenu = "ANTIPASTO: " + antiPasto1 + "  " + antiPasto2 + "  " + antiPasto3;
        System.out.println(descripcionMenu); 
        descripcionMenu = "PRIMER PLATO:  " + primerPlato;
        System.out.println(descripcionMenu); 
        descripcionMenu = "SEGUNDO PLATO:  " + segundoPlato;
        System.out.println(descripcionMenu); 
        descripcionMenu = "POSTRE:  " + postre;
        System.out.println(descripcionMenu); 
        descripcionMenu = "VINO:  " + vino;
        System.out.println(descripcionMenu); 
        System.out.println(); 
    }

    
    
}
