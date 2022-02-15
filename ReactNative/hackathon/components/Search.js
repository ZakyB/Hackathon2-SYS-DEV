// Components/Search.js

import React from 'react'
import { View, TextInput, Button, Text } from 'react-native'

class Search extends React.Component {
  render() {
    return (
      <View style={{marginTop: 50}}>
        <Text style={{marginTop:40, fontSize:30, color:'blue', marginLeft:120}}>Connexion</Text>
        <TextInput style={{marginLeft:10, marginRight: 10, height:50, borderColor: 'black', borderWidth: 1, paddingLeft:5}} placeholder='Login'/>
        <TextInput style={{marginLeft:10, marginRight: 10, height:50, borderColor: 'black', borderWidth: 1, paddingLeft:5}} placeholder='Password'/>
        <Button title='Rechercher' onPress={() => {}}/>
      </View>
    )
  }
}
export default Search
