private void crearLista(String strJson){
		//se crea el objeto que ayuda deserealizar la cadena JSON
		gson = new Gson();

		//Obtenemos el tipo de un ArrayList
		Type lstT = new TypeToken< ArrayList>(){}.getType();

		//Creamos una objeto ArrayList
		ArrayList arrListAOS = new ArrayList();

		//Deserealizamos la cadena JSON para que se convertida a un ArrayList
		arrListAOS = gson.fromJson(strJson, lstT);

		//Asignaos la ArrayList al controls ListView para mostrar
		//la lista de SO Android que se consumieron del web service
		lsvAndroidOS.setAdapter(new ArrayAdapter
		(getApplication(), android.R.layout.simple_list_item_1, arrListAOS));

	}