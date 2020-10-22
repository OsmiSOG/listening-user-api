package com.example.apirest.controller;

import java.util.List;

import javax.management.RuntimeErrorException;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.DeleteMapping;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.PutMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import com.example.apirest.service.UserService;
import com.example.apirest.entity.User;

@RestController
@RequestMapping("/api")

public class UserRestController {
	
	@Autowired
	private UserService userService;
	
	@GetMapping("/usuarios")
	public List <User> findAll(){
		return userService.findAll();
	}
	
	@GetMapping("/usuarios/{usuariosid}")
	public User geUser(@PathVariable int usuariosid){
		User user = userService.findById(usuariosid);
				if (user == null) {
					throw new RuntimeException("Usuario no encontrado"+usuariosid);
				}
		return user;
	}
	
	@PostMapping("/usuarios")
	public User addUser(@RequestBody User user) {
		user.setId(0);
		userService.save(user);
		
		return user;
		
	}
	
	@PutMapping("/usuarios")
	public User updateUser(@RequestBody User user) {
		
		userService.save(user);
		
		return user;
	}
	
	@DeleteMapping("usuarios/{usariosid}")
	public String deteteUser(@PathVariable int usuariosid) {
		
		User user = userService.findById(usuariosid);
		
		if(user == null) {
			throw new RuntimeException("Usuario no encontrado"+usuariosid);
		}
		
		userService.deleteById(usuariosid);
		
		//Esto método, recibira el id de un usuario por URL y se borrará de la bd.
		return "Usuario borrado"+usuariosid;
	}
	

}
