import React from 'react';
import { StyleSheet, View, TextInput, Button, Text, FlatList } from 'react-native'

class ConsultationService extends React.Component{

  state ={
     data:[]
   }

   fetchData= async()=>{
     const response = await fetch('https://db31-2a01-e34-ecab-260-782a-d047-14a2-c856.eu.ngrok.io/utilisateurs');
     const utilisateurs = await response.json();
     this.setState({data: utilisateurs});

   }
 componentDidMount(){
   this.fetchData();
 }
   render() {
     return (
       <View >
        <Text>Welcome</Text>

        <FlatList
        data={this.state.data}
        keyExtractor={(item,index) => index.toString()}
        renderItem={({item}) =>

        <View style={{backgroundColor:'#abc123',padding:10,margin:10}}>
           <Text style={{color:'#fff', fontWeight:'bold'}}>{item.nom}</Text>
           <Text style={{color:'#fff'}}>{item.emai}</Text>
          </View>

        }

        />
       </View>
     );
   }
 }

 const styles = StyleSheet.create({
   container: {
     flex: 1,
     justifyContent: 'center',
     alignItems: 'center',
     backgroundColor: '#F5FCFF',
   },
 });

export default ConsultationService
