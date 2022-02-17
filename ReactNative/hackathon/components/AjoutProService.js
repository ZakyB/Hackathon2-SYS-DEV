import React from 'react'
import {StyleSheet,TextInput, Button, View,Text} from 'react-native'
import {useNavigation} from '@react-navigation/native'

const AjoutProService=()=>{
const navigation = useNavigation();
    return(
    <View style={{marginTop:70, flex: 1}}>
    <View>
    <Text style={{paddingLeft:60,marginRight:15,marginLeft:15,fontSize:30, color:'blue', borderColor: 'blue', borderWidth:3}}>Ajout d'un service</Text>
    <TextInput
    style={styles.texti} placeholder='Titre du service'/>
    <TextInput
    style={styles.texti}placeholder='Date'/>
    <TextInput
    style={styles.texti}placeholder='Ville'/>
    <TextInput
    style={styles.texti}placeholder='Coût'/>
    <TextInput
    style={styles.texti}placeholder='Catégorie'/>
    <TextInput
    style={styles.texti}placeholder='Description'/>

    </View>
    <View style={{marginTop:50,flexDirection: "row" , justifyContent: 'space-evenly'}}>
    <Button style={{marginTop:25}}title="Retour" onPress={()=>navigation.navigate("Search")}/>
    <Button  title="Ajouter" onPress={()=>navigation.navigate("Search")}/>
    </View>
    </View>
  );
}
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


export default AjoutProService;
