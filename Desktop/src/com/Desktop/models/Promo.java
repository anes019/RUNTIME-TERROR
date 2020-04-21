/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.Desktop.models;


/**
 *
 * @author 21694
 */
public class Promo {
	
	private int id;
	private String Description;
	private String Code;
	private int Flag;
	private int Valeur;

	public Promo() {
	}

	public Promo(int id) {
		this.id = id;
	}

	public Promo(String Description, String Code, int Flag, int Valeur) {
		this.Description = Description;
		this.Code = Code;
		this.Flag = Flag;
		this.Valeur = Valeur;
	}

	public Promo(int id, String Description, String Code, int Flag, int Valeur) {
		this.id = id;
		this.Description = Description;
		this.Code = Code;
		this.Flag = Flag;
		this.Valeur = Valeur;
	}

	public int getId() {
		return id;
	}

	public void setId(int id) {
		this.id = id;
	}

	public String getDescription() {
		return Description;
	}

	public void setDescription(String Description) {
		this.Description = Description;
	}

	public String getCode() {
		return Code;
	}

	public void setCode(String Code) {
		this.Code = Code;
	}

	public int getFlag() {
		return Flag;
	}

	public void setFlag(int Flag) {
		this.Flag = Flag;
	}

	public int getValeur() {
		return Valeur;
	}

	public void setValeur(int Valeur) {
		this.Valeur = Valeur;
	}
	
	
	
}
