import React from 'react'
import {TextInput, Button, View,Text} from 'react-native'
import {useNavigation} from '@react-navigation/native'

const AjoutProService=()=>{
const navigation = useNavigation();
    return(
    <View style={{marginTop:70, flex: 1}}>
    <View>
    <Text style={{paddingLeft:60,marginRight:15,marginLeft:15,fontSize:30, color:'blue', borderColor: 'blue', borderWidth:3}}>Ajout d'un service</Text>
    <TextInput
    style={{paddingLeft:6,height: 50,marginLeft:10,marginRight:10, marginTop:30,borderColor: 'gray', borderWidth:1}} placeholder='Titre du service'/>
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
    <Button style={{marginTop:25}}title="Retour" onPress={()=>navigation.navigate("Search")}/>
    <Button  title="Ajouter" onPress={()=>navigation.navigate("Search")}/>
    </View>
    </View>
  );
}



export default AjoutProService;
