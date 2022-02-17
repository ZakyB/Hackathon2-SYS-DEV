// Components/Choix.js

import React from 'react'
import { StyleSheet,View, TextInput, Button, Text } from 'react-native'
import {useNavigation} from '@react-navigation/native'


const ValidMail =()=>{
  const navigation = useNavigation();
    return (
      <View style={styles.mainContainer}>
        <Button title='Mon Profil' onPress={()=>navigation.navigate("MonProfil")}/>


      <View style={{flex:2,justifyContent :'space-evenly'}}>
          <Text style={styles.text}>Votre email à bien était envoyé !
          Cliquer sur le bouton ci-dessous pour retourner à la page d'accueil </Text>
          </View>
            <Button title="Retourner à l'accueil" onPress={()=>navigation.navigate("Choix")}/>
      </View>
    );

  }


const styles = StyleSheet.create( {
  mainContainer: {
    flex:1,
    color :'blue',
    fontSize : 30,
    marginTop :120

  },
  text:{
  marginLeft:40,
  fontSize:30,
   color:'#200a8c',
   textAlign : 'center'

}
})

export default ValidMail
  //<Button title="Demande de Services" onPress={()=>navigation.navigate("")}/>
