// Components/Choix.js

import React from 'react'
import { StyleSheet,View, TextInput, Button, Text } from 'react-native'
import {useNavigation} from '@react-navigation/native'

//Page d'accueil après connexion
const Choix =()=>{
  const navigation = useNavigation();
    return (
      <View style={styles.mainContainer}>
        <Button title='Mon Profil' onPress={()=>navigation.navigate("MonProfil")}/>


      <View style={{flex:2,justifyContent :'space-evenly'}}>
          <Text style={styles.text}> C'est à vous de choisir ! </Text>
        <Button title='Consultations des Services' onPress={()=>navigation.navigate("ServicePro")}/>
        <Button title='Consultations des Demandes de Services' onPress={()=>navigation.navigate("DemandeDeService")}/>
      </View>
      </View>
    );

  }

//fiche de style
const styles = StyleSheet.create( {
  mainContainer: {
    flex:1,
    color :'blue',
    fontSize : 30,
    marginTop :120
  },
  text:{
  marginLeft:40,fontSize:30, color:'#200a8c',

}
})
//export du composant
export default Choix
  //<Button title="Demande de Services" onPress={()=>navigation.navigate("")}/>
