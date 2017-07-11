//
//  MasterViewController.m
//  EjemploWebServices
//
//  Created by trainer on 05/06/14.
//  Copyright (c) 2014 trainer. All rights reserved.
//

#import "MasterViewController.h"
#import "DetailViewController.h"

@interface MasterViewController ()
            
@property NSMutableArray *objects;

@end

@implementation MasterViewController


- (void)viewDidLoad {
    [super viewDidLoad];
    
    
    NSURL * url = [NSURL URLWithString:@"http://llberganza.com/ejemplo.json"];
    
    NSData * jsonData = [NSData dataWithContentsOfURL:url];
    
    NSArray * listadoCursos = [NSJSONSerialization JSONObjectWithData:jsonData options:kNilOptions error:nil];
    
    
    self.cursosllberganza = listadoCursos;
    [self.tableView reloadData];
    

   }



#pragma mark - Table View

- (NSInteger)numberOfSectionsInTableView:(UITableView *)tableView {
    return 1;
}

- (NSInteger)tableView:(UITableView *)tableView numberOfRowsInSection:(NSInteger)section {
    return self.cursosllberganza.count;
}

- (UITableViewCell *)tableView:(UITableView *)tableView cellForRowAtIndexPath:(NSIndexPath *)indexPath {
    UITableViewCell *cell = [tableView dequeueReusableCellWithIdentifier:@"Cell" forIndexPath:indexPath];

    
    NSDictionary * diccionario = [self.self.cursosllberganza objectAtIndex:indexPath.row];
    
    
    cell.textLabel.text = [diccionario objectForKey:@"curso"];
    cell.detailTextLabel.text = [diccionario objectForKey:@"profesor"];
    
    

    return cell;
}



@end














