import React from 'react'
import {TextInput, Button, View,Text} from 'react-native'
import {useNavigation} from '@react-navigation/native'

const AjoutDemande=()=>{
const navigation = useNavigation();
    return(
    <View style={{marginTop:70, flex: 1}}>
    <View>
    <Text style={{paddingLeft:36,marginLeft:90, marginRight:75,fontSize:30, color:'blue', borderColor: 'blue', borderWidth:3}}>Ajout d'une demande de service</Text>
    <TextInput
    style={{paddingLeft:6,height: 50,marginLeft:10,marginRight:10, marginTop:30,borderColor: 'gray', borderWidth:1}} placeholder='Titre de la demande'/>
    <TextInput
    style={{paddingLeft:6,height: 50,marginLeft:10,marginRight:10, marginTop:10,borderColor: 'gray', borderWidth:1}}placeholder='Date'/>
    <TextInput
    style={{paddingLeft:6,height: 50,marginLeft:10,marginRight:10, marginTop:10,borderColor: 'gray', borderWidth:1}}placeholder='Ville'/>
    <TextInput
    style={{paddingLeft:6,height: 50,marginLeft:10,marginRight:10, marginTop:10,borderColor: 'gray', borderWidth:1}}placeholder='Coût'/>
    <TextInput
    style={{paddingLeft:6,height: 50,marginLeft:10,marginRight:10, marginTop:10,borderColor: 'gray', borderWidth:1}}placeholder='Catégorie'/>
    <TextInput
    style={{paddingLeft:6,height: 100,marginLeft:10,marginRight:10, marginTop:10,borderColor: 'gray', borderWidth:1}}placeholder='Description'/>

    </View>
    <View style={{marginTop:50,flexDirection: "row" , justifyContent: 'space-evenly'}}>
    <Button style={{marginTop:25}}title="Retour" onPress={()=>navigation.navigate("DemandeDeService")}/>
    <Button  title="Ajouter" onPress={()=>navigation.navigate("DemandeDeService")}/>
    </View>
    </View>
  );
}



export default AjoutDemande;
