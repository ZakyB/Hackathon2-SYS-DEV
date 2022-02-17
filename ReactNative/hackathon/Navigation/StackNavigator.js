import React from 'react';
import{View, Text} from 'react-native';
import {createNativeStackNavigator} from '@react-navigation/native-stack';
import MonProfil from '../components/MonProfil';
import Connexion from '../components/Connexion';
import Search from '../components/Search';
import Inscription from '../components/Inscription'
import Choix from '../components/Choix'
import DemandeDeService from '../components/DemandeDeService'
import AjoutDemande from '../components/AjoutDemande'
import AjoutProService from '../components/AjoutProService'

const Stack = createNativeStackNavigator();

const StackNavigator = () => {
  return(
    <Stack.Navigator screenOptions={{headerShown: false}}>
      <Stack.Group>
        <Stack.Screen name="Connexion" component={Connexion}/>
        <Stack.Screen name="Search" component={Search}/>
        <Stack.Screen name="MonProfil" component={MonProfil}/>
        <Stack.Screen name="Inscription" component={Inscription}/>
        <Stack.Screen name="Choix" component={Choix}/>
        <Stack.Screen name="DemandeDeService" component={DemandeDeService}/>
        <Stack.Screen name="AjoutDemande" component={AjoutDemande}/>
        <Stack.Screen name="AjoutProService" component={AjoutProService}/>

      </Stack.Group>
      </Stack.Navigator>
  );
};

export default StackNavigator;
