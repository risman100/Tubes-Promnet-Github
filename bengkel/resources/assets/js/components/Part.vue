<template id="post-list">
	<div class="row">
		<div class="pul-right">
			<router-link class="btn btn-xs btn-primary">
			<span class="glyphicon glyphicon-plus"></span>
			Add new 
			</router-link>
			<br><br>
		</div>
	</div>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>ID Part</th>
				<th>Kode Part</th>
				<th>Nama Part</th>
			</tr>
		</thead>
		<tbody>
			<tr v-for="post in filteredpost">
				<td>{{post.id_part}}</td>
				<td>{{post.kode_part}}</td>
				<td>{{post.nama_part}}</td>
			</tr>
		</tbody>
	</table>

</template>

<script>
	export default{
		data:function(){
			return {posts:''};
		},
		created: function(){
			let uri = 'http://127.0.0.1:8000/posts_part/';
			Axios.get(uri).then((response) => {
				this.posts = response.data;
			});
		}
		computed:{
			filteredpost: function(){
				if(this.posts.lenght){
					return this.posts;
				}
			}
		}
	}
</script>