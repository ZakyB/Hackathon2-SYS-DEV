// Components/Search.js

import React from 'react'
import { View, TextInput, Button, Text } from 'react-native'

class Search extends React.Component {
  render() {
    return (
      <View style={styles.mainContainer}>
        <Text style={{marginTop:40, fontSize:30, color:'blue', marginLeft:120}}>Connexion</Text>
        <TextInput style={styles.textinput} placeholder='Login'/>
        <TextInput style={styles.textinput} placeholder='Password'/>
        <Button title='Rechercher' onPress={() => {}}/>
      </View>
    )

  }
}

const styles = {
  mainContainer: {
    flex:1,
    justifyContent:'center'
  },
  textinput: {
    marginLeft:10,
    marginRight:10,
    height:50,
    borderColor: 'black',
    borderWidth: 1,
    paddingLeft:5
  }
}
export default Search
