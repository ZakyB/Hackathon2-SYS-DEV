import React from 'react'
import {StyleSheet,TextInput, Button, View,Text} from 'react-native'
import {useNavigation} from '@react-navigation/native'
//Page permettant l'inscription
const Inscription=()=>{
const navigation = useNavigation();
    return(
    <View style={{marginTop:70, flex: 1}}>
    <View>
    <Text style={{paddingLeft:36,marginLeft:90, marginRight:90,fontSize:30, color:'blue', borderColor: 'blue', borderWidth:3}}>Inscription</Text>
    <TextInput
    style={styles.textinput} placeholder='Nom'/>
    <TextInput
    style={styles.textinput}placeholder='Prenom'/>
    <TextInput
    style={styles.textinput}placeholder='Adresse'/>
    <TextInput
    style={styles.textinput}placeholder='Mail'/>
    <TextInput
    style={styles.textinput}placeholder='Tel'/>
    <TextInput
    style={styles.textinput}placeholder='Date de naissance'/>
    <TextInput
    style={styles.textinput}placeholder='Mot de passe'/>
    <TextInput
    style={styles.textinput}placeholder='Confirmer votre mot de passe'/>

    </View>
    <View style={{marginTop:40,flexDirection: "row" , justifyContent: 'space-evenly' }}>
    <Button style={{marginTop:25}}title="Retour" onPress={()=>navigation.navigate("Connexion")}/>
    <Button  title="Valider" onPress={()=>navigation.navigate("Connexion")}/>
    </View>
    </View>
  );
}
//fiche de style
const styles = StyleSheet.create({
  textinput:{
    paddingLeft:6,
    height: 50,
    marginLeft:10,
    marginRight:10,
     marginTop:30,
     borderColor: 'gray',
      borderWidth:1
    }
})



export default Inscription;
