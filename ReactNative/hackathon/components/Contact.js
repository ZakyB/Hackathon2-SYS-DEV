import React from 'react'
import {StyleSheet,TextInput, Button, View,Text} from 'react-native'
import {useNavigation} from '@react-navigation/native'
//Page permettant l'envoie d'un mail apres selection d'un service
const Contact=()=>{
const navigation = useNavigation();
    return(
    <View style={{marginTop:70, flex: 1}}>
    <View>
    <Text style={{textAlign:'center',marginLeft:90, marginRight:90, fontSize:30, color:'blue', borderColor: 'blue', borderWidth:3}}>Page Contact</Text>

    <TextInput
    style={styles.textinput} placeholder='Description'/>

    </View>
    <View style={{marginTop:75,flexDirection: "row" , justifyContent: 'space-evenly' }}>
    <Button style={{marginTop:35}}title="Retour" onPress={()=>navigation.navigate("ServicePro")}/>
    <Button  title="Valider" onPress={()=>navigation.navigate("MonProfil")}/>
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
//export du composant
export default Modifier;
