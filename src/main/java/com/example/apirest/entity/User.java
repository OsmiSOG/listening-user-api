package com.example.apirest.entity;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.Table;

@Entity
@Table(name="usuarios")

public class User {
	
@Id
@GeneratedValue(strategy = GenerationType.IDENTITY)
@Column(name="id")
private int id;
	
@Column(name="nombre")
private String nombre;	

@Column(name="nick")
private String nick;

@Column(name="password")
private String password;

@Column(name="email")
private String email;

public User() {}

public User(int id, String nombre, String nick, String password, String email) {
	this.id = id;
	this.nombre = nombre;
	this.nick = nick;
	this.password = password;
	this.email = email;
}

public int getId() {
	return id;
}

public void setId(int id) {
	this.id = id;
}

public String getNombre() {
	return nombre;
}

public void setNombre(String nombre) {
	this.nombre = nombre;
}

public String getNick() {
	return nick;
}

public void setNick(String nick) {
	this.nick = nick;
}

public String getPassword() {
	return password;
}

public void setPassword(String password) {
	this.password = password;
}

public String getEmail() {
	return email;
}

public void setEmail(String email) {
	this.email = email;
}

@Override
public String toString() {
	return "User [id=" + id + ", nombre=" + nombre + ", nick=" + nick + ", password=" + password + ", email=" + email
			+ "]";
}




}
