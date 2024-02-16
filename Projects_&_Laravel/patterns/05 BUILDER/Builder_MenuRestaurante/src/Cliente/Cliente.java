/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Cliente;

import builder_menurestaurante.Comanda;

/**
 *
 * @author Pedro Pablo
 */
public class Cliente {
    /**
     * @param args the command line arguments
     */
    
    private static Comanda comanda;
    
    public static void main(String[] args) {
        comanda = new Comanda();
        comanda.despacha_Comanda();  
    }
}
