package com.mygarage

import org.springframework.boot.autoconfigure.SpringBootApplication
import org.springframework.boot.runApplication

@SpringBootApplication
class MyGarageApplication

fun main(args: Array<String>) {
	runApplication<MyGarageApplication>(*args)
}
