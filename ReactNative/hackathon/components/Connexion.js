// Components/Search.js

import React from 'react'
import {StyleSheet, View, TextInput, Button, Text, Image} from 'react-native'
import {useNavigation} from '@react-navigation/native'


const Connexion =()=>{
  const navigation = useNavigation();
    return (

      <View style={styles.mainContainer}>
      <Image style={styles.image}
            source={require('../assets/iconCo1.png')}/>
        <Text style={ styles.text}>Bienvenue sur BSS !</Text>

        <Text style={{marginLeft:85, fontSize:20, color:'#299ee6'}}>Veuillez vous connecter</Text>
        <View style={{marginTop:50}}>
        <TextInput style={styles.textinput} placeholder='Adresse Email'/>
        <TextInput style={styles.textinput} placeholder='Mot de passe' secureTextEntry={true}/>
        </View>
        <View style={{marginTop:60}}>
        <Button title='Se connecter' onPress={()=>navigation.navigate("Choix")}/>
        <Button title="S'inscrire" onPress={()=>navigation.navigate("Inscription")}/>
        </View>
      </View>
    );

  }


const styles = StyleSheet.create({
  mainContainer: {
    flex:1,
    marginTop:200,

  },
  image:{
    marginBottom:25,
    marginLeft: 155
  },
  textinput: {
    marginLeft:10,
    marginRight:10,
    height:50,
    borderColor: 'black',
    borderWidth: 1,
    paddingLeft:5,
    marginTop:5
  },
  text:{
  marginLeft:60,fontSize:30, color:'blue'

}
});
export default Connexion
