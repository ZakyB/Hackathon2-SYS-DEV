import React from 'react'
import {TextInput, Button, View} from 'react-native'
import {useNavigation} from '@react-navigation/native'

const MonProfil=()=>{
const navigation = useNavigation();
    return(
    <View>

    <TextInput

    style={{height: 40, marginTop:50,borderColor: 'gray', borderWidth:1}}  />
    <Button onPress={()=>navigation.navigate("Connexion")} title="Déconnexion"/>
    <View style={{flexDirection: "row" ,marginLeft: 20, justifyContent: 'space-evenly' }}>
    <Button style={{height:40}} title="Update" />
    <Button style={{height:40}} title="Log out"/>
    </View>
    </View>
  );
  }


export default MonProfil;
