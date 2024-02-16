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
public class MenuRestaurante extends Menu implements Cloneable {
    @SuppressWarnings("FieldMayBeFinal")
    private String tipoMenu;
    private String antiPasto1;
    private String antiPasto2;
    private String antiPasto3;
    private String primerPlato;
    private String segundoPlato;
    private String postre;
    private String vino;
    private String descripcionMenu;
    
    //MÉTODO CONSTRUCTOR
    public MenuRestaurante (String tipoMenu, String antiPasto1, String antiPasto2, String antiPasto3,
            String primerPlato, String segundoPlato, String postre, String vino) {
        this.tipoMenu = tipoMenu;
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
        System.out.println("MENU CREADO: " + tipoMenu); 
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

    //AQUÍ ES DEONDE REALMENTE SE IMPLEMENTA EL PATRÓN 'PROTOTYPE', AL CLONAR EL OBJETO
    //EXISTENTE Y COMO RESULTADO CREAR UNA COPIA IDÉNTICA A DICHO OBJETO
    @Override
  public Object clone() throws CloneNotSupportedException {
  
    MenuRestaurante nuevoMenu= new MenuRestaurante (this.tipoMenu,this.antiPasto1,this.antiPasto2,
    this.antiPasto3,this.primerPlato, this.segundoPlato,this.postre,this.vino);
    return nuevoMenu;
  }
  //GETTERS Y SETTERS
  public void setTipoMenu(String tipoMenu){
    this.tipoMenu = tipoMenu;
  }
  public String getTipoMenu(){
    return this.tipoMenu;
  }
  public void setAntiPasto1(String antiPasto1){
    this.antiPasto1 = antiPasto1;
  }
   public String getAntiPasto1(){
    return this.antiPasto1;
  }
  public void setAntiPasto2(String antiPasto2){
    this.antiPasto2 = antiPasto2;
  }
  public String getAntiPasto2(){
    return this.antiPasto2;
  }
  public void setAntiPasto3(String antiPasto3){
    this.antiPasto3 = antiPasto3;
  }
  public String getAntiPasto3(){
    return this.antiPasto3;
  }
  public void setPrimerPlato(String primerPlato){
    this.primerPlato = primerPlato;
  }
  public String getPrimerPlato(){
    return this.primerPlato;
  }
  public void setSegundoPlato(String segundoPlato){
    this.segundoPlato = segundoPlato;
  }
  public String getSegundoPlato(){
    return this.segundoPlato;
  }
  public void setPostre(String postre){
    this.postre = postre;
  }
  public String getPostre(){
    return this.postre;
  }
  public void setVino(String vino){
    this.vino = vino;
  }
  public String getVino(){
    return this.vino;
  }
}
