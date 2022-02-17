import React from 'react'
import {StyleSheet,TextInput, Button, View, Image,Text} from 'react-native'
import {useNavigation} from '@react-navigation/native'
//Affiche le profil de l'utilisateur actuel
const MonProfil=()=>{
const navigation = useNavigation();
    return(
    <View>
    <Text style={styles.title}>Votre Profil :</Text>
    <Image style={styles.image}
          source={require('../assets/userblue.png')}/>
        <View style={styles.view_text}>
        <Text style={styles.text}>Nom : </Text>
        <Text style={styles.text}>Prenom : </Text>
        <Text style={styles.text}>Adresse : </Text>
        <Text style={styles.text}>Email : </Text>
        <Text style={styles.text}>Téléphone : </Text>
      </View>


    <View style={{marginTop:60,flexDirection: "row" ,marginLeft: 20, justifyContent: 'space-evenly' }}>
    <Button style={{height:40}} title="Retour" onPress={() => navigation.navigate('Choix')}/>
    <Button onPress={()=>navigation.navigate("Connexion")} title="Déconnexion"/>
    <Button style={{height:40}} title="Modifier" onPress={() => navigation.navigate('Modifier')}/>

    </View>

    </View>
  );
  }
//fiche de style
const styles = StyleSheet.create({
  main_container:{
    marginTop : 50,
    height:190,
    flexDirection : 'column',
    justifyContent :'center'
  },
  image : {
    width : 275,
    height: 275,
    backgroundColor:'#2d75c2',
    marginTop: 35,
    marginLeft: 55,
  },
  text:{
    marginTop:10,
    marginBottom:10,
    fontWeight:'bold',
    fontSize:16,
    color : '#2d75c2'
  },
  view_text:{
    marginTop : 30,
    borderWidth:1,
    borderColor: '#2d75c2',
    paddingLeft:10,
    marginLeft:10,
    marginRight:15
  },
  view_button:{
  marginTop:40,
  flexDirection: "row" ,
  marginLeft: 20,
   justifyContent: 'space-evenly'

  },
  title:{
    marginTop:100,
    textAlign:'center',
    fontSize:35,
    color :'#2d75c2',
    textDecorationLine: 'underline'
  }


})


export default MonProfil;
