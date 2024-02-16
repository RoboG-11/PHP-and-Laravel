/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package prototype_menurestaurante;

/**
 *
 * @author PEDRO PABLO
 */
public class Elabora_MenuRestaurante extends Elabora_Menu {
    private MenuRestaurante menuGourmet;
    int variedadMenuSeleccionado;
    private String antiPasto1;
    private String antiPasto2;
    private String antiPasto3;
    private String primerPlato;
    private String segundoPlato;
    private String postre;
    private String vino;
    
    @Override
    public void creaMenu(int tipoVino) {
        if (tipoVino == 1){
            variedadMenuSeleccionado = (int) (Math.random() * 5) + 1;
            switch (variedadMenuSeleccionado) {
                case 1:
                    antiPasto1 = "Alcachofas gratinadas"; antiPasto2 = "Brusqueta"; 
                    antiPasto3 = "Jamón serrano"; primerPlato = "Risotto ai Funghi";
                    segundoPlato = "Filete Rib Eye"; postre = "Panna cotta"; 
                    vino = "Chianti Clásico Reserva";
                    break;
                case 2: 
                    antiPasto1 = "Ensalada César"; antiPasto2 = "Brusqueta"; 
                    antiPasto3 = "Mixto de quesos madurados"; primerPlato = "Pasta a la Carbonara";
                    segundoPlato = "Estofado de ternera a la pimienta"; postre = "Tiramisu"; 
                    vino = "Rivera del Duero";
                    break;
                case 3:
                    antiPasto1 = "Croquetas de jamón serrano"; antiPasto2 = "Brusqueta"; 
                    antiPasto3 = "Ensalada caprese"; primerPlato = "Pasta a la Bolognesa";
                    segundoPlato = "Pierna de cerdo al horno"; postre = "Strudel de manzana"; 
                    vino = "Cabernet Souvignon Superior";
                    break;
                case 4:
                    antiPasto1 = "Provoletta ahumada"; antiPasto2 = "Crostini"; 
                    antiPasto3 = "Ensalada primavera"; primerPlato = "Risotto a la Milanese";
                    segundoPlato = "Estofado de conejo"; postre = "Crema Catalana"; 
                    vino = "Rioja Reserva";
                    break;
                case 5:
                    antiPasto1 = "Alcachofas gratinadas"; antiPasto2 = "Croquetas de jamón serrano"; 
                    antiPasto3 = "Mixto de quesos maduros"; primerPlato = "Pasta Bolognesa";
                    segundoPlato = "Medallones de ternera al Chianti"; postre = "Pastel de tres chocolates"; 
                    vino = "Chianti Clásico Reserva";
                    break;   
            }
            menuGourmet = new MenuRestaurante ("Menú Gourmet", antiPasto1, antiPasto2, antiPasto3,
            primerPlato, segundoPlato, postre, vino);
        }
        if (tipoVino == 2){
            menuGourmet = new MenuRestaurante ("Menú Gourmet", "Queso provoleta", "Crostini mixtos", "Lasagna frita",
            "Pasta alla carbonara", "Milanera de ternera", "Gelato", "Vino tinto joven");
        }
        if (tipoVino == 3){
            menuGourmet = new MenuRestaurante ("Menú Gourmet", "Mixto de quesos frescos", "Carpacho de salmón", "Bruschetta",
            "Pasta Alfredo", "Pollo a la Parmesana", "Panna cotta", "Vino blanco espumoso");
        }
        
    }

    @Override
    public MenuRestaurante getMenu() {
        return menuGourmet;
    }
    
}
