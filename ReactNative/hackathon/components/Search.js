// Components/Search.js

import React from 'react'
import { StyleSheet, View, TextInput, Button, Text, FlatList } from 'react-native'
import films from '../Helpers/FilmsData.js'
import ServiceItem from './ServiceItem.js'

import {createAppContainer} from 'react-navigation'
import { createStackNavigator } from 'react-navigation-stack'
import {useNavigation} from '@react-navigation/native'


const Search=()=>{
  const navigation = useNavigation();

  //  console.log(this.props)
    return (
      <View style={styles.main_container}>
        <TextInput style={styles.textinput} placeholder='Service recherché'/>

        <View style={{flexDirection: "row" , justifyContent: 'space-evenly' }}>
        <Button style={{height:40}} title="Retour" onPress={() => navigation.navigate('Choix')}/>
        <Button style={{height:40}} title="Mon Profil" onPress={() => navigation.navigate('MonProfil')}/>
        <Button style={{height:70}}title='+' onPress={() => navigation.navigate('AjoutProService')}/>
        </View>
        <FlatList
          data={films}
          keyExtractor={(item) => item.id.toString() }
          renderItem={({item}) => <ServiceItem/>}
          renderItem={({item}) => <ServiceItem film={item} displayDetailForFilm={this._displayDetailForFilm}/>}
        />
      </View>
    );
  }



const styles = StyleSheet.create({
  main_container: {
    flex: 1,
    marginTop: 50
  },
  textinput: {
    marginLeft: 5,
    marginRight: 5,
    height: 50,
    borderColor: 'blue',
    borderWidth: 1,
    paddingLeft: 5
  }
})

export default Search
