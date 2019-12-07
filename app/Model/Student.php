<?php 
/**
  * tabla en la db se debe escribir en plural y en minisculas 
  	el modelo den sigular y en camelCase
  */
 class Student extends AppModel
 {
    public $validate = array(
    	'nombre'=> array('rule'=>'notBlank'),
    	'last_name' => array('rule'=>'notBlank')
    );
     public $hasAndBelongsToMany = array(
    	'Curso'=>array(
    				'className'=>'Curso',
    				'joinTable'=>'students_cursos',
    				'foreignKey'=>'student_id',
    				'associationForeignKey'=>'curso_id'
    	)
    );
 } ?>