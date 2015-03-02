<!DOCTYPE html>
<html>
    <head>
        <title>Post</title>
    </head>
    <body>
        
        <h1>Libros</h1>
        
        <?php
            
            $libros = array(
                /*0*/array(
                    'id' => '1',
                    'titulo' => 'Matematicas Discretas',
                    'autor' => 'Richard Johnsonbaugh',
                    'contenido' => 'Este libro esta planeado para un curso de introduccion a las matematicas discretas,
                                    con una duracion de uno o dos semestres. Los requisitos de matematicas son minimos:
                                    no es necesario un conocimiento del calculo. Tampoco se exigen requisitos de
                                    computacion. El libro incluye ejemplos, ejercicios, figuras, tablas, secciones relativas
                                    a la solucion de problemas, notas, repaso y autoevaluacion de cada capitulo que
                                    ayudaran al estudiante a dominar las matematicas discretas basicas.'
                ),
                /*1*/array(
                    'id' => '2',
                    'titulo' => 'Astronomia Elemental',
                    'autor' => 'Isaias Rojas Pena',
                    'contenido' => 'la ciencia que se ocupa del estudio de los cuerpos celestes del universo'
                ),
                /*2*/array(
                    'id' => '3',
                    'titulo' => 'How to program java',
                    'autor' => 'Paul Deitel',
                    'contenido' =>'Welcome to Java and Java How to Program, Ninth Edition! This book presents leadingedge
                                  computing technologies for students, instructors and software developers.
                                  The new Chapter 1 engages students with intriguing facts and figures to get them
                                  excited about studying computers and programming. The chapter includes a table of some
                                  of the research made possible by computers; current technology trends and hardware discussion'
                ),
                /*3*/array(
                     'id' => '4',
                    'titulo' => 'Fisica',
                    'autor' => 'Maria Fonseca',
                    'contenido' =>'ciencia natural que estudia las propiedades y el comportamiento de la energia y la materia'
                ),
                array(
                    'id' => '5',
                    'titulo' => 'Quimica',
                    'autor' => 'raymod chang',
                    'contenido' =>'ciencia que estudia tanto la composicion, estructura y
                                   propiedades de la materia como los cambios que esta experimenta durante las reacciones 
                                   quimicas y su relacion con la energia'
                ),
                array(
                    'id' => '6',
                    'titulo' => 'Calculo Diferencial',
                    'autor' => 'Ana Valencia',
                    'contenido' => 'es una parte del analisis matemático que consiste en el estudio de como cambian las 
                                    funciones cuando sus variables cambian. El principal objeto de estudio en el calculo 
                                    diferencial es la derivada'
                )
            );
            
        ?>
        <br>
        <br>
        

        <div>
            <?php foreach ($libros as $libros) { ?>
                  <div> 
                    <?php echo $libros['id']; ?>
                    </div>
                       <div> <h3>
                    <?php echo $libros['titulo']; ?>
                            </h3>
                       </div>
                      <div> 
                        <span style="color:red">Autor</span>
                        <br>
                        <?php echo $libros['autor']; ?>     
                      </div>
                    <div>
                    <span style="color:blue">Contenido</span>
                    <br>
                    <?php echo $libros['contenido']; ?>
                    </div>
                </div>
            <?php } ?>
        
    </body>
</html>

