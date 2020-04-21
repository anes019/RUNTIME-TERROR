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
public class Abonnement {
	
	private int id;
	private String positionDepart;
	private String positionArrive;
	private String heureDepart;
	private int Utilisateurs_id;

	public Abonnement() {
	}

	public Abonnement(int id) {
		this.id = id;
	}

	public Abonnement(String positionDepart, String positionArrive, String heureDepart, int Utilisateurs_id) {
		this.positionDepart = positionDepart;
		this.positionArrive = positionArrive;
		this.heureDepart = heureDepart;
		this.Utilisateurs_id = Utilisateurs_id;
	}

	public Abonnement(int id, String positionDepart, String positionArrive, String heureDepart, int Utilisateurs_id) {
		this.id = id;
		this.positionDepart = positionDepart;
		this.positionArrive = positionArrive;
		this.heureDepart = heureDepart;
		this.Utilisateurs_id = Utilisateurs_id;
	}

	public int getId() {
		return id;
	}

	public void setId(int id) {
		this.id = id;
	}

	public String getPositionDepart() {
		return positionDepart;
	}

	public void setPositionDepart(String positionDepart) {
		this.positionDepart = positionDepart;
	}

	public String getPositionArrive() {
		return positionArrive;
	}

	public void setPositionArrive(String positionArrive) {
		this.positionArrive = positionArrive;
	}

	public String getHeureDepart() {
		return heureDepart;
	}

	public void setHeureDepart(String heureDepart) {
		this.heureDepart = heureDepart;
	}

	public int getUtilisateurs_id() {
		return Utilisateurs_id;
	}

	public void setUtilisateurs_id(int Utilisateurs_id) {
		this.Utilisateurs_id = Utilisateurs_id;
	}
	
	
	
}
