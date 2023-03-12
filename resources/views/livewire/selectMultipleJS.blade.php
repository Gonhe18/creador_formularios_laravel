<script>
   window.addEventListener('editMultiple', ent => {
      let data = cargarDatos();
      actualizarInput(data, ent.detail)
   })

   function cargarDatos() {
      let valores = [];
      $(".actualizar").each((k, v) => {
         valores.push(v.value);
      })
      return valores;
   }

   function actualizarInput(value, id) {
      $("#" + id).val(value)
   }

   function agregar(ent, id) {
      let tipos = cargarDatos();
      if (!tipos.includes($("#" + ent).val())) {
         tipos.push($("#" + ent).val());
      }
      actualizarInput(tipos, id)
   }

   function eliminar(id, ent) {
      let tipos = cargarDatos();
      if (tipos.includes(id)) {
         delete tipos[tipos.indexOf(id)]
         actualizarInput(tipos, ent)
      }
   }

   function eliminarTodos(ent) {
      let tipos = [];
      actualizarInput(tipos, ent)
   }

   function agregarTodos(ent, id) {
      let tipos = [];
      let op = document.getElementById(ent).options.length

      for (let i = 0; i < op; i++) {
         if (document.getElementById(ent).options[i].value != '') {
            tipos.push(document.getElementById(ent).options[i].value)
         }
      }
      actualizarInput(tipos, id)
   }
</script>