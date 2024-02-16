/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package prototype_menurestaurante;

import java.util.ArrayList;

/**
 *
 * @author Pedro Pablo
 */
public class Comanda {
    private MenuRestaurante menuGourmet1;
    private MenuRestaurante menuGourmet2;
    private MenuRestaurante menuGourmet3;
    private static int cantidadMenuEnComanda;
    private static Menu menuEspecifico;
    
    //LA COMANDA ES UN CONTENEDOR DE LOS TRES TIPOS DE MENÚ
    private Elabora_MenuRestaurante elabora_MenuRestaurante;
   // private ConstConcreto_MenuEjecutivo constConcreto_MenuEjecutivo;
    //private ConstConcreto_MenuDelDia constConcreto_MenuDelDia;
    
    public void despacha_Comanda() {
        //****************************************************************************************
        //CREACIÓN DE UN OBJETO DEL TIPO Elabora_MenuRestaurante
        elabora_MenuRestaurante = new Elabora_MenuRestaurante ();
        
        //****************************************************************************************
        //SOLICITUD DE CREACIÓN DE UN TIPO DE MENÚ GOURMET, A BASE DE VINO TINTO RESERVA
        //A fabricaConcreta_MenuGourmet
        elabora_MenuRestaurante.creaMenu(1);
        
        //RECUPERACIÓN DEL OBJETO MenuGourmet CREADO
        menuGourmet1 = elabora_MenuRestaurante.getMenu();
        
        //VISUALIZACIÓN DEL ESTADO DEL OBJETO menuGourmet DEVUELTO POR fabricaConcreta_MenuGourmet
        menuGourmet1.visualizaMenu();
        
        //****************************************************************************************
        //SOLICITUD DE CREACIÓN DE UN TIPO DE MENÚ GOURMET, A BASE DE VINO TINTO JOVEN
        //A fabricaConcreta_MenuGourmet
        elabora_MenuRestaurante.creaMenu(2);
        
        //RECUPERACIÓN DEL OBJETO MenuGourmet CREADO
        menuGourmet2 = elabora_MenuRestaurante.getMenu();
        
        //VISUALIZACIÓN DEL ESTADO DEL OBJETO menuGourmet DEVUELTO POR fabricaConcreta_MenuGourmet
        menuGourmet2.visualizaMenu();
        
        //****************************************************************************************
        //SOLICITUD DE CREACIÓN DE UN TIPO DE MENÚ GOURMET, A BASE DE VINO BLANCO
        //A fabricaConcreta_MenuGourmet
        elabora_MenuRestaurante.creaMenu(3);
        
        //RECUPERACIÓN DEL OBJETO MenuGourmet CREADO
        menuGourmet3 = elabora_MenuRestaurante.getMenu();
        
        //VISUALIZACIÓN DEL ESTADO DEL OBJETO menuGourmet DEVUELTO POR fabricaConcreta_MenuGourmet
        menuGourmet3.visualizaMenu();
        
        
        //****************************************************************************************
        //USO DEL ARRAYLIST PARA LA CREACIÓN DE UNA COMANDA DE MENÚS
        ArrayList<Menu> comandaMenu = new ArrayList();
        
        //CREACIÓN DE OBJETOS DEL TIPO Menu Y ADICIÓN DE LOS MISMOS A LA comandaMenu
        comandaMenu.add(menuGourmet1);
        comandaMenu.add(menuGourmet2);
        comandaMenu.add(menuGourmet3);
                
        cantidadMenuEnComanda = comandaMenu.size();
        System.out.println("CANTIDAD DE MENÚS EN LA COMANDA: " + cantidadMenuEnComanda); 
        
        //RECORRIDO DE LA COMANDA Y VISUALIZACIÓN DE LOS MENÚS
        for (int i = 0; i<cantidadMenuEnComanda; i++){
            menuEspecifico = comandaMenu.get(i);
            menuEspecifico.visualizaMenu();
        }
    }
    
    //RETORNA EL OBJETO 'menuGourmet1'
    public MenuRestaurante getMenuGourmet1(){
        return menuGourmet1;
    }
    
    //RETORNA EL OBJETO 'menuGourmet2'
    public MenuRestaurante getMenuGourmet2(){
        return menuGourmet2;
    }
    
    //RETORNA EL OBJETO 'menuGourmet3'
    public MenuRestaurante getMenuGourmet3(){
        return menuGourmet3;
    }
}
