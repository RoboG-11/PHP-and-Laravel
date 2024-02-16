/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package builder_menurestaurante;

import java.util.ArrayList;

/**
 *
 * @author Pedro Pablo
 */
public class Comanda {
    private static Menu menuGourmet1;
    private static Menu menuGourmet2;
    private static Menu menuGourmet3;
    private static Menu menuEjecutivo;
    private static Menu menuDelDia1;
    private static Menu menuDelDia2;
    private static int cantidadMenuEnComanda;
    private static Menu menuEspecifico;
    
    //LA COMANDA ES UN CONTENEDOR DE LOS TRES TIPOS DE MENÚ
    private ConstConcreto_MenuGourmet constConcreto_MenuGourmet;
    private ConstConcreto_MenuEjecutivo constConcreto_MenuEjecutivo;
    private ConstConcreto_MenuDelDia constConcreto_MenuDelDia;
    
    public void despacha_Comanda() {
        //****************************************************************************************
        //CREACIÓN DE UN OBJETO DEL TIPO FabricaConcreta_MenuGourmet
        constConcreto_MenuGourmet = new ConstConcreto_MenuGourmet ();
        
        //****************************************************************************************
        //SOLICITUD DE CREACIÓN DE UN TIPO DE MENÚ GOURMET, A BASE DE VINO TINTO RESERVA
        //A fabricaConcreta_MenuGourmet
        constConcreto_MenuGourmet.creaMenu(1);
        
        //RECUPERACIÓN DEL OBJETO MenuGourmet CREADO
        menuGourmet1 = constConcreto_MenuGourmet.getMenu();
        
        //VISUALIZACIÓN DEL ESTADO DEL OBJETO menuGourmet DEVUELTO POR fabricaConcreta_MenuGourmet
        menuGourmet1.visualizaMenu();
        
        //****************************************************************************************
        //SOLICITUD DE CREACIÓN DE UN TIPO DE MENÚ GOURMET, A BASE DE VINO TINTO JOVEN
        //A fabricaConcreta_MenuGourmet
        constConcreto_MenuGourmet.creaMenu(2);
        
        //RECUPERACIÓN DEL OBJETO MenuGourmet CREADO
        menuGourmet2 = constConcreto_MenuGourmet.getMenu();
        
        //VISUALIZACIÓN DEL ESTADO DEL OBJETO menuGourmet DEVUELTO POR fabricaConcreta_MenuGourmet
        menuGourmet2.visualizaMenu();
        
        //****************************************************************************************
        //SOLICITUD DE CREACIÓN DE UN TIPO DE MENÚ GOURMET, A BASE DE VINO BLANCO
        //A fabricaConcreta_MenuGourmet
        constConcreto_MenuGourmet.creaMenu(3);
        
        //RECUPERACIÓN DEL OBJETO MenuGourmet CREADO
        menuGourmet3 = constConcreto_MenuGourmet.getMenu();
        
        //VISUALIZACIÓN DEL ESTADO DEL OBJETO menuGourmet DEVUELTO POR fabricaConcreta_MenuGourmet
        menuGourmet3.visualizaMenu();
        
        //****************************************************************************************
        //CREACIÓN DE UN OBJETO DEL TIPO ConstConcreto_MenuEjecutivo
        constConcreto_MenuEjecutivo = new ConstConcreto_MenuEjecutivo ();
        
        //****************************************************************************************
        //SOLICITUD DE CREACIÓN DE UN TIPO DE MENÚ EJECUTIVO, ESTABLECIDO PARA LOS LUNES
        //A constConcreta_MenuEjecutivo
        constConcreto_MenuEjecutivo.creaMenu(1);
        
        //RECUPERACIÓN DEL OBJETO MenuEjecutivo CREADO
        menuEjecutivo = constConcreto_MenuEjecutivo.getMenu();
        
        //VISUALIZACIÓN DEL ESTADO DEL OBJETO menuEjecutivo DEVUELTO 
        //POR fabricaConcreta_MenuEjecutivo
        menuEjecutivo.visualizaMenu();
        
        //****************************************************************************************
        //CREACIÓN DE UN OBJETO DEL TIPO FabricaConcreta_MenuDelDia
        constConcreto_MenuDelDia = new ConstConcreto_MenuDelDia ();
        
        //****************************************************************************************
        //SOLICITUD DE CREACIÓN DE UN TIPO DE MENÚ DEL DÍA, ESTABLECIDO PARA LOS MIÉRCOLES
        //A fabricaConcretAMenuDelDia
        constConcreto_MenuDelDia.creaMenu(3);
        
        //RECUPERACIÓN DEL OBJETO MenuEjecutivo CREADO
        menuDelDia1 = constConcreto_MenuDelDia.getMenu();
        
        //VISUALIZACIÓN DEL ESTADO DEL OBJETO menuEjecutivo DEVUELTO 
        //POR fabricaConcreta_MenuEjecutivo
        menuDelDia1.visualizaMenu();
        
        //****************************************************************************************
        //SOLICITUD DE CREACIÓN DE UN TIPO DE MENÚ DEL DÍA, ESTABLECIDO PARA LOS VIERNES
        //A fabricaConcretAMenuDelDia
        constConcreto_MenuDelDia.creaMenu(5);
        
        //RECUPERACIÓN DEL OBJETO MenuEjecutivo CREADO
        menuDelDia2 = constConcreto_MenuDelDia.getMenu();
        
        //VISUALIZACIÓN DEL ESTADO DEL OBJETO menuEjecutivo DEVUELTO 
        //POR fabricaConcreta_MenuEjecutivo
        menuDelDia2.visualizaMenu();
        
        //****************************************************************************************
        //USO DEL ARRAYLIST PARA LA CREACIÓN DE UNA COMANDA DE MENÚS
        ArrayList<Menu> comandaMenu = new ArrayList();
        
        //CREACIÓN DE OBJETOS DEL TIPO Menu Y ADICIÓN DE LOS MISMOS A LA comandaMenu
        comandaMenu.add(menuGourmet1);
        comandaMenu.add(menuGourmet2);
        comandaMenu.add(menuGourmet3);
        comandaMenu.add(menuEjecutivo);
        comandaMenu.add(menuDelDia1);
        comandaMenu.add(menuDelDia2);
        
        cantidadMenuEnComanda = comandaMenu.size();
        System.out.println("CANTIDAD DE MENÚS EN LA COMANDA: " + cantidadMenuEnComanda); 
        
        //RECORRIDO DE LA COMANDA Y VISUALIZACIÓN DE LOS MENÚS
        for (int i = 0; i<cantidadMenuEnComanda; i++){
            menuEspecifico = comandaMenu.get(i);
            menuEspecifico.visualizaMenu();
        }
    }
}
