<?php 
/**
 * summary
 */
class Curso extends AppModel
{
    public $displayField='name';
    public $belongsTo =array(
    	'Teacher'=>array(
    			'className'=>'Teacher',
    			'foreignKey'=>'teacher_id'
    		)
    	);
    public $hasAndBelongsToMany = array(
    	'Student'=>array(
    				'className'=>'Student',
    				'joinTable'=>'students_cursos',
    				'foreignKey'=>'curso_id',
    				'associationForeignKey'=>'student_id'
    	)
    );
}

 ?>