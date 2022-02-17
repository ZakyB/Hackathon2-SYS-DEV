// Components/ServiceItem.js

import React from 'react'
import { StyleSheet, View, Text, Image, TouchableOpacity } from 'react-native'
//Composant qui permet d'afficher un service
//appel dans DeamndeDeService.js et ServicePro
class ServiceItem extends React.Component {
  render() {
      const {service, displayDetailForservice} = this.props
      return (

        <TouchableOpacity
    style={styles.main_container}
    onPress={() => displayDetailForservice(service.id)}>
          <Image
            style={styles.image}
            source={{uri: "image"}}
          />
          <View style={styles.content_container}>
            <View style={styles.header_container}>
              <Text style={styles.title_text}>{service.title}</Text>

            </View>
            <View style={styles.description_container}>
              <Text style={styles.description_text} numberOfLines={6}>{service.overview}</Text>
            </View>
            <View style={styles.date_container}>
              <Text style={styles.date_text}>Datant du {service.release_date}</Text>
            </View>
          </View>

        </TouchableOpacity>
      )
  }
}
//style
const styles = StyleSheet.create({
  main_container: {
    marginTop:40,
    height: 190,
    flexDirection: 'row'
  },
  image: {
    width: 120,
    height: 180,
    margin: 5,
    backgroundColor: '#2d75c2'
  },
  content_container: {
    flex: 1,
    margin: 5
  },
  header_container: {
    flex: 3,
    flexDirection: 'row'
  },
  title_text: {
    fontWeight: 'bold',
    fontSize: 20,
    flex: 1,
    flexWrap: 'wrap',
    paddingRight: 5
  },
  vote_text: {
    fontWeight: 'bold',
    fontSize: 26,
    color: '#666666'
  },
  description_container: {
    flex: 7
  },
  description_text: {
    fontStyle: 'italic',
    color: '#666666'
  },
  date_container: {
    flex: 1
  },
  date_text: {
    textAlign: 'right',
    fontSize: 14
  }
})

export default ServiceItem
