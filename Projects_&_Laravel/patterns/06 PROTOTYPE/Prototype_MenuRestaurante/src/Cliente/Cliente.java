/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Cliente;

import prototype_menurestaurante.Comanda;
import prototype_menurestaurante.MenuRestaurante;

/**
 *
 * @author Pedro Pablo
 */
public class Cliente {
    /**
     * @param args the command line arguments
     */
    
    //private static Comanda comanda;
    //private static MenuRestaurante menuGourmet1;
    //private static MenuRestaurante menuGourmet2;
    //private static MenuRestaurante menuGourmet3;
    
    public static void main(String[] args) {
        Comanda comanda;
        MenuRestaurante menuGourmet1;
        MenuRestaurante menuGourmet2;
        MenuRestaurante menuGourmet3;
        
        //SE CREA UN OBJETO DE TIPO 'Comanda'
        comanda = new Comanda();
        comanda.despacha_Comanda();  
        //SE RECUPERAN LOS TRES OBJETOS TIPO 'MenuRestaurante' CREADOS POR LA COMANDA
        menuGourmet1 = comanda.getMenuGourmet1();
        menuGourmet2 = comanda.getMenuGourmet2();
        menuGourmet3 = comanda.getMenuGourmet3();
        
        //CREACIÓN DE UN PROTOTIPO A PARTIR DEL OBJETO 'menuGourmet1'
        try {
            //CON EL MÉTODO 'clone()' SE CREA UN NUEVO OBJETO IDÉNTICO AL OBJETO 'menuGourmet1',
            //EL NUEVO OBJETO SE NOMBRA 'menuNuevo'
            MenuRestaurante menuNuevo=(MenuRestaurante)menuGourmet1.clone();
           
            //CAMBIAMOS EL VALOR DE 3 ATRIBUTOS EN EL NUEVO OBJETO CREADO 'menuNuevo' DESDE EL 
            //OBJETO PROTOTIPO 'menuGourmet1'
            menuNuevo.setAntiPasto1("No procede");
            menuNuevo.setAntiPasto2("No procede");
            menuNuevo.setVino("No procede");
            
            //AHORA VISUALIZAMOS TODOS LOS ATRIBUTOS DEL NUEVO OBJETO CLONADO
            //PARA VERIFICAR QUE REALMENTE SE TRATA DE UN NUEVO OBJETO CREADO A PARTIR DEL
            //OBJETO PROTOTIPO 'menuGourmet1'
            System.out.println("ATRIBUTOS DEL OBJETO CLONADO A PARTIR DEL OBJETO PROTOTIPO:");
            System.out.println("Antipasto #1: " + menuNuevo.getAntiPasto1());
            System.out.println("Antipasto #2: " + menuNuevo.getAntiPasto2());
            System.out.println("Antipasto #3: " + menuNuevo.getAntiPasto3());
            System.out.println("Primer plato: " + menuNuevo.getPrimerPlato());
            System.out.println("Segundo plato: " + menuNuevo.getSegundoPlato());
            System.out.println("Postre: " + menuNuevo.getPostre());
            System.out.println("Vino: " + menuNuevo.getVino());
            System.out.println("****************");
            } catch (CloneNotSupportedException e) {
            // TODO Auto-generated catch block
            }
    }
}
