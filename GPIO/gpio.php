<?php

if ($_REQUEST['progf1']) {
                               exec("sudo /./home/elvis/permiso.sh");
                               $horaini=$_REQUEST['horaini'];
                               $minini=$_REQUEST['minini'];
                               $horafin=$_REQUEST['horafin'];
                               $minifin=$_REQUEST['minifin'];
                               $dia="*";
                               $mes="*";
                               $ano="*";
                               $tab=" ";
                               $usuario="root";

                               $path="/home/elvis/on17.sh";
                               $pf=fopen("/etc/cron.d/gpio17on","w");
                               fwrite($pf,$minini);
                               fwrite($pf,$tab);
                               fwrite($pf,$horaini);
                               fwrite($pf,$tab);
                               fwrite($pf,$dia);
                               fwrite($pf,$tab);
                               fwrite($pf,$mes);
                               fwrite($pf,$tab);
                               fwrite($pf,$ano);
                               fwrite($pf,$tab);
                               fwrite($pf,$usuario);
                               fwrite($pf,$tab);
                               fwrite($pf,$path);
                               fwrite($pf,"\n");
                               fclose($pf);

                               $path2="/home/elvis/off17.sh";
                               $pf2=fopen("/etc/cron.d/gpio17off","w");
                               fwrite($pf2,$minifin);
                               fwrite($pf2,$tab);
                               fwrite($pf2,$horafin);
                               fwrite($pf2,$tab); 
                               fwrite($pf2,$dia);
                               fwrite($pf2,$tab);
                               fwrite($pf2,$mes);
                               fwrite($pf2,$tab);
                               fwrite($pf2,$ano);
                               fwrite($pf2,$tab);
                               fwrite($pf2,$usuario);
                               fwrite($pf2,$tab);
                               fwrite($pf2,$path2);
                               fwrite($pf2,"\n");
                               fclose($pf2);
                               exec("sudo /home/elvis/nopermiso.sh");

                              }

if ($_REQUEST['progf2']) {
                               exec("sudo /./home/elvis/permiso21.sh");
                               $horaini=$_REQUEST['horaini2'];
                               $minini=$_REQUEST['minini2'];
                               $horafin=$_REQUEST['horafin2'];
                               $minifin=$_REQUEST['minifin2'];
                               $dia="*";
                               $mes="*";
                               $ano="*";
                               $tab=" ";
                               $usuario="root";

                               $path="/home/elvis/on21.sh";
                               $pf=fopen("/etc/cron.d/gpio17on","w");
                               fwrite($pf,$minini);
                               fwrite($pf,$tab);
                               fwrite($pf,$horaini);
                               fwrite($pf,$tab);
                               fwrite($pf,$dia);
                               fwrite($pf,$tab);
                               fwrite($pf,$mes);
                               fwrite($pf,$tab);
                               fwrite($pf,$ano);
                               fwrite($pf,$tab);
                               fwrite($pf,$usuario);
                               fwrite($pf,$tab);
                               fwrite($pf,$path);
                               fwrite($pf,"\n");
                               fclose($pf);

                               $path2="/home/elvis/on21.sh";
                               $pf2=fopen("/etc/cron.d/gpio21off","w");
                               fwrite($pf2,$minifin);
                               fwrite($pf2,$tab);
                               fwrite($pf2,$horafin);
                               fwrite($pf2,$tab); 
                               fwrite($pf2,$dia);
                               fwrite($pf2,$tab);
                               fwrite($pf2,$mes);
                               fwrite($pf2,$tab);
                               fwrite($pf2,$ano);
                               fwrite($pf2,$tab);
                               fwrite($pf2,$usuario);
                               fwrite($pf2,$tab);
                               fwrite($pf2,$path2);
                               fwrite($pf2,"\n");
                               fclose($pf2);
                               exec("sudo /home/elvis/nopermiso21.sh");

                              }

if ($_REQUEST['encender17'])   {
                                   exec("sudo /./home/elvis/on17.sh 2>&1");
                                  }

if ($_REQUEST['apagar17'])   {
                                   exec("sudo /./home/elvis/off17.sh 2>&1");
                                  }
if ($_REQUEST['encender21']) {
                                   exec("sudo /./home/elvis/on21.sh 2>&1");
                                  }

if ($_REQUEST['apagar21'])   {

                                  exec("sudo /./home/elvis/off21.sh 2>&1");
                                  }

if ($_REQUEST['encender27']) {
                                   exec("sudo /./home/elvis/on27.sh 2>&1");
                                  }

if ($_REQUEST['apagar27'])   {
                                   exec("sudo /./home/elvis/off27.sh 2>&1");
                                  }
if ($_REQUEST['foto'])   {
                                   exec("sudo /./home/elvis/foto.sh");
				   exec("sudo /./home/elvis/correo.sh");
                                  }

exec("sudo /./home/elvis/on21.sh");
 header("location:index.php");

?>


