import React from 'react'
import {TextInput, Button, View,Text} from 'react-native'
import {useNavigation} from '@react-navigation/native'

const Inscription=()=>{
const navigation = useNavigation();
    return(
    <View style={{marginTop:70, flex: 1}}>
    <View>
    <Text style={{paddingLeft:36,marginLeft:90, marginRight:90,fontSize:30, color:'blue', borderColor: 'blue', borderWidth:3}}>Inscription</Text>
    <TextInput
    style={{paddingLeft:6,height: 50,marginLeft:10,marginRight:10, marginTop:30,borderColor: 'gray', borderWidth:1}} placeholder='Nom'/>
    <TextInput
    style={{paddingLeft:6,height: 50,marginLeft:10,marginRight:10, marginTop:10,borderColor: 'gray', borderWidth:1}}placeholder='Prenom'/>
    <TextInput
    style={{paddingLeft:6,height: 50,marginLeft:10,marginRight:10, marginTop:10,borderColor: 'gray', borderWidth:1}}placeholder='Adresse'/>
    <TextInput
    style={{paddingLeft:6,height: 50,marginLeft:10,marginRight:10, marginTop:10,borderColor: 'gray', borderWidth:1}}placeholder='Mail'/>
    <TextInput
    style={{paddingLeft:6,height: 50,marginLeft:10,marginRight:10, marginTop:10,borderColor: 'gray', borderWidth:1}}placeholder='Tel'/>
    <TextInput
    style={{paddingLeft:6,height: 50,marginLeft:10,marginRight:10, marginTop:10,borderColor: 'gray', borderWidth:1}}placeholder='Date de naissance'/>
    <TextInput
    style={{paddingLeft:6,height: 50,marginLeft:10,marginRight:10, marginTop:10,borderColor: 'gray', borderWidth:1}} placeholder='Mot de passe'/>
    <TextInput
    style={{paddingLeft:6,height: 50,marginLeft:10,marginRight:10, marginTop:10,borderColor: 'gray', borderWidth:1}} placeholder='Confirmer votre mot de passe'/>

    </View>
    <View style={{marginTop:50,flexDirection: "row" , justifyContent: 'space-evenly' }}>
    <Button style={{marginTop:25}}title="Retour" onPress={()=>navigation.navigate("Connexion")}/>
    <Button  title="Valider" onPress={()=>navigation.navigate("Connexion")}/>
    </View>
    </View>
  );
}



export default Inscription;
