<template>
	<div class="container">
	<div>
		aquí está el error xd
	</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Título</th>
      <th scope="col">Definición</th>
      <th scope="col">Fecha</th>
      <th scope="col">Estado</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="concepto in conceptos" v-bind:key="concepto.id">
      <th scope="row">{{concepto.id}}</th>
      <td>{{concepto.titulo}}</td>
      <td>{{concepto.definicion}}</td>
      <td>{{concepto.fecha}}</td>
      <td>{{concepto.estado}}</td>
      <td><a href="#" name="" id="" class="btn btn-primary fa fa-pencil" role="button"></a>  <a href="#" name="" id="" class="btn btn-danger fa fa-trash" role="button"></a> </td>
      
    </tr>
  </tbody>

</table>
</div>

</template>


<script>
	export default{

		data(){
			return{conceptos:[]} 
		},
		
		created: function(){
			this.consultarConcepto();
		},
		
		methods:{
			//http://localhost/phpmyadmin/sql.php?server=1&db=microeco&table=concepto&pos=0
			consultarConcepto(){
				fetch('http://localhost/micro/index.php/clogin/test/')
				.then(respuesta=>respuesta.json())
				.then((datosRespuesta)=>{

					console.log(datosRespuesta)
					this.conceptos=[]
					if(typeof datosRespuesta[0].success==='undefined')
					{
						this.conceptos=datosRespuesta;	
					}

				})
				.catch(console.log)
			}
		}
	}
</script>