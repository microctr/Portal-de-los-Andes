<?php 
	/**
	* 
	*/
	class GestionDatos 
	{
		private $hostname;
		private $base;
		private $usuario;
		private $contraseña;

		function __construct()
		{
			$this->hostname="127.0.0.1";
			$this->usuario="root";
			$this->contraseña="";
			$this->base="pandes";

			$conexion=mysql_connect($this->hostname, $this->usuario, $this->contraseña);
			mysql_select_db($this->base);
			if(!$conexion){
				echo "No se pudo conectar".mysql_error();
			}
		}

		public function GrabarDatos($entidad,$campos,$atributos){
			$res=mysql_query("insert into $entidad($campos) values ($atributos)");
			/*print("insert into $entidad($campos) values ($atributos)");
			/*if ($res=1){
				echo "Guardado Correctamente";
			}else{
				echo "No se pudo Guardar";
			}*/
		}
		public function ModificarDatos($entidad,$campos,$condicion){
			$res=mysql_query("update  $entidad set $campos where $condicion");
			print("update  $entidad set $campos where $condicion");
			if ($res=1){
				echo "Actualizado Correctamente";
			}else{
				echo "No se pudo Actualizar";
			}
		}
		public function EliminarDatos($entidad,$campoid,$campoest,$id){
			$res=mysql_query("update  $entidad set $campoest=0 where $campoid='$id'");
			print("update  $entidad set $campoest='0' where $campoid='$id'");
			/*if ($res=1){
				echo "Eliminado Correctamente";
			}else{
				echo "No se pudo Eliminar";
			}*/
		}
		/*la siguiente funcion permite realizar un eliminado con codigo personalizado*/
		public function EliminarDatosPers($entidad,$campoid,$campoest,$condicion){
			$res=mysql_query("update  $entidad set $campoest=0 where $condicion");
			print("update  $entidad set $campoest='0' where $campoid='$id'");
			if ($res=1){
				echo "Eliminado Correctamente";
			}else{
				echo "No se pudo Eliminar";
			}
		}
		public function ListarDatosBusqueda($entidad,$campos,$camposfiltro,$criterio,$nestado){
			echo "select $campos from $entidad where $camposfiltro like '%$criterio%'";
			return mysql_query("select $campos from $entidad where $camposfiltro like '%$criterio%' and $nestado='1'");
		}

		public function ListarDatosBusquedaNoEstado($entidad,$campos,$camposfiltro,$criterio){
			return mysql_query("select $campos from $entidad where $camposfiltro like '%$criterio%'");
		}
		/*Coleccion=requiere nombre de entidad, nombre de campo a comparar y valor de campo*/
		public function Obtener($tabla,$campo,$id){
			//echo "select * from $tabla  where $campo =$id";
			return mysql_query("select *  from $tabla  where $campo =$id ");
		}

		public function Obtener_Datos_Usuario($campos,$entidad,$nameuser,$user){
			echo "select $campos from $entidad  where $nameuser='$user'";
			$result=mysql_query("select $campos from $entidad  where $nameuser='$user'");
			$fila=mysql_fetch_array($result);
			return $fila[0];
		}
		/*Entero=retorna el valor de coincidencias desde una entidad con una cuenta y contraseña*/
		public function Verificar($entidad,$nameuser,$namepassword,$user,$password){
			/*echo ""select count($nameuser) from $entidad where $nameuser='$user' and $namepassword='$password'";*/
			//print("select count($nameuser) as cant from $entidad where $nameuser='$user' and $namepassword='$password'");
			$result=mysql_query("select count($nameuser) from $entidad where $nameuser='$user' and $namepassword='$password'");
			$fila=mysql_fetch_array($result);
			return (int)$fila[0];

		}
	}
 ?>