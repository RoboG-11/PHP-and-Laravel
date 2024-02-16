/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Cliente;

import abstractfactory_menurestaurante.FabricaConcreta_MenuGourmet;
import abstractfactory_menurestaurante.FabricaConcreta_MenuEjecutivo;
import abstractfactory_menurestaurante.FabricaConcretaMenuDelDia;
import abstractfactory_menurestaurante.Menu;

import java.util.ArrayList;

/**
 *
 * @author usuario
 */
public class Cliente {
    /**
     * @param args the command line arguments
     */
    private static Menu menuGourmet1;
    private static Menu menuGourmet2;
    private static Menu menuGourmet3;
    private static Menu menuEjecutivo;
    private static Menu menuDelDia1;
    private static Menu menuDelDia2;
    private static int cantidadMenuEnComanda;
    private static Menu menuEspecifico;
    
    public static void main(String[] args) {
        //****************************************************************************************
        //CREACIÓN DE UN OBJETO DEL TIPO FabricaConcreta_MenuGourmet
        FabricaConcreta_MenuGourmet fabricaConcreta_MenuGourmet;
        fabricaConcreta_MenuGourmet = new FabricaConcreta_MenuGourmet ();
        
        //****************************************************************************************
        //SOLICITUD DE CREACIÓN DE UN TIPO DE MENÚ GOURMET, A BASE DE VINO TINTO RESERVA
        //A fabricaConcreta_MenuGourmet
        fabricaConcreta_MenuGourmet.creaMenu(1);
        
        //RECUPERACIÓN DEL OBJETO MenuGourmet CREADO
        menuGourmet1 = fabricaConcreta_MenuGourmet.getMenu();
        
        //VISUALIZACIÓN DEL ESTADO DEL OBJETO menuGourmet DEVUELTO POR fabricaConcreta_MenuGourmet
        menuGourmet1.visualizaMenu();
        
        //****************************************************************************************
        //SOLICITUD DE CREACIÓN DE UN TIPO DE MENÚ GOURMET, A BASE DE VINO TINTO JOVEN
        //A fabricaConcreta_MenuGourmet
        fabricaConcreta_MenuGourmet.creaMenu(2);
        
        //RECUPERACIÓN DEL OBJETO MenuGourmet CREADO
        menuGourmet2 = fabricaConcreta_MenuGourmet.getMenu();
        
        //VISUALIZACIÓN DEL ESTADO DEL OBJETO menuGourmet DEVUELTO POR fabricaConcreta_MenuGourmet
        menuGourmet2.visualizaMenu();
        
        //****************************************************************************************
        //SOLICITUD DE CREACIÓN DE UN TIPO DE MENÚ GOURMET, A BASE DE VINO BLANCO
        //A fabricaConcreta_MenuGourmet
        fabricaConcreta_MenuGourmet.creaMenu(3);
        
        //RECUPERACIÓN DEL OBJETO MenuGourmet CREADO
        menuGourmet3 = fabricaConcreta_MenuGourmet.getMenu();
        
        //VISUALIZACIÓN DEL ESTADO DEL OBJETO menuGourmet DEVUELTO POR fabricaConcreta_MenuGourmet
        menuGourmet3.visualizaMenu();
        
        //****************************************************************************************
        //CREACIÓN DE UN OBJETO DEL TIPO FabricaConcreta_MenuEjecutivo
        FabricaConcreta_MenuEjecutivo fabricaConcreta_MenuEjecutivo;
        fabricaConcreta_MenuEjecutivo = new FabricaConcreta_MenuEjecutivo ();
        
        //****************************************************************************************
        //SOLICITUD DE CREACIÓN DE UN TIPO DE MENÚ EJECUTIVO, ESTABLECIDO PARA LOS LUNES
        //A fabricaConcreta_MenuEjecutivo
        fabricaConcreta_MenuEjecutivo.creaMenu(1);
        
        //RECUPERACIÓN DEL OBJETO MenuEjecutivo CREADO
        menuEjecutivo = fabricaConcreta_MenuEjecutivo.getMenu();
        
        //VISUALIZACIÓN DEL ESTADO DEL OBJETO menuEjecutivo DEVUELTO 
        //POR fabricaConcreta_MenuEjecutivo
        menuEjecutivo.visualizaMenu();
        
        //****************************************************************************************
        //CREACIÓN DE UN OBJETO DEL TIPO FabricaConcreta_MenuDelDia
        FabricaConcretaMenuDelDia fabricaConcretaMenuDelDia;
        fabricaConcretaMenuDelDia = new FabricaConcretaMenuDelDia ();
        
        //****************************************************************************************
        //SOLICITUD DE CREACIÓN DE UN TIPO DE MENÚ DEL DÍA, ESTABLECIDO PARA LOS MIÉRCOLES
        //A fabricaConcretAMenuDelDia
        fabricaConcretaMenuDelDia.creaMenu(3);
        
        //RECUPERACIÓN DEL OBJETO MenuEjecutivo CREADO
        menuDelDia1 = fabricaConcretaMenuDelDia.getMenu();
        
        //VISUALIZACIÓN DEL ESTADO DEL OBJETO menuEjecutivo DEVUELTO 
        //POR fabricaConcreta_MenuEjecutivo
        menuDelDia1.visualizaMenu();
        
        //****************************************************************************************
        //SOLICITUD DE CREACIÓN DE UN TIPO DE MENÚ DEL DÍA, ESTABLECIDO PARA LOS VIERNES
        //A fabricaConcretAMenuDelDia
        fabricaConcretaMenuDelDia.creaMenu(5);
        
        //RECUPERACIÓN DEL OBJETO MenuEjecutivo CREADO
        menuDelDia2 = fabricaConcretaMenuDelDia.getMenu();
        
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
