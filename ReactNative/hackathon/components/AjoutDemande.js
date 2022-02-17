import React from 'react'
import {StyleSheet,TextInput, Button, View,Text} from 'react-native'
import {useNavigation} from '@react-navigation/native'
// Page permettant l'ajout d'une demande de service
const AjoutDemande=()=>{
const navigation = useNavigation();
    return(
    <View style={{marginTop:70, flex: 1}}>
    <View>
    <Text style={{paddingLeft:36,marginLeft:90, marginRight:75,fontSize:30, color:'blue', borderColor: 'blue', borderWidth:3}}>Ajout d'une demande de service</Text>
    <TextInput
    style={styles.texti} placeholder='Titre de la demande'/>
    <TextInput
    style={styles.texti}placeholder='Date'/>
    <TextInput
    style={styles.texti}placeholder='Ville'/>
    <TextInput
    style={styles.text}placeholder='Coût'/>
    <TextInput
    style={styles.texti}placeholder='Catégorie'/>
    <TextInput
    style={styles.texti}placeholder='Description'/>

    </View>
    <View style={{marginTop:50,flexDirection: "row" , justifyContent: 'space-evenly'}}>
    <Button style={{marginTop:25}}title="Retour" onPress={()=>navigation.navigate("DemandeDeService")}/>
    <Button  title="Ajouter" onPress={()=>navigation.navigate("DemandeDeService")}/>
    </View>
    </View>
  );
}
//fiche de style
const styles = StyleSheet.create({
  texti:{
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
export default AjoutDemande;
