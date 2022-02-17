// Components/serviceDetail.js

import React from 'react'
import { StyleSheet, View, Text } from 'react-native'
//page detaillé du service selecioné
class ServiceDetail extends React.Component {
  render() {
  //  console.log(this.props.navigation)
    return (
      <View style={styles.main_container}>
        <Text>Détail du service {this.props.navigation.getParam('idservice')}</Text>
        <Text>Détail du service {this.props.navigation.getParam('idservice')}</Text>
        <Text>Détail du service {this.props.navigation.getParam('idservice')}</Text>
        <Text>Détail du service {this.props.navigation.getParam('idservice')}</Text>
      </View>
    )
  }
}

const styles = StyleSheet.create({
  main_container: {
    flex: 1,
  }
})

export default ServiceDetail
