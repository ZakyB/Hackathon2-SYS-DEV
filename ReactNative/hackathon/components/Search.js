// Components/Search.js

import React from 'react'
import { StyleSheet,View, TextInput, Button } from 'react-native'

class Connexion extends React.Component {
  render() {
      return (
        <View style={{ backgroundColor: 'yellow' }}>
          <View style={{ height: 335, backgroundColor: 'red' }}></View>
          <View style={{ height: 335, backgroundColor: 'green' }}></View>
        </View>
      )
   }
}

const styles = {
  textinput: {
    marginLeft: 5,
    marginRight: 5,
    height: 50,
    borderColor: '#000000',
    borderWidth: 1,
    paddingLeft: 5
  }
}
export default Connexion
