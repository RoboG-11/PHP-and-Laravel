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
abstract public class Menu {
    abstract public void visualizaMenu (); 
    abstract public void setMenu (String antiPasto1, String antiPasto2, String antiPasto3,
            String primerPlato, String segundoPlato, String postre, String vino);    
}
